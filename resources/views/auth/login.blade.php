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
        <h1>Iniciar sesión</h1>
        <form class="login-form" action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <label class="login-input login-input-email ui-label ui-input-label" id="lbl-email" placeholder="email">
                <span class="ui-label-text">Correo</span>
                <input class="ui-text-input" type="email" name="email" id="email" value="" tabindex="1" autocomplete="email" required autofocus/>
            </label>
            <div class="hybrid-password-wrapper">
                <label class="hybrid-password login-input login-input-password ui-label ui-input-label" id="lbl-password" placeholder="password">
                    <span class="ui-label-text">Contraseña</span>
                    <input type="password" class="ui-text-input" name="password" id="password" tabindex="2" required/>
                </label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span></span>
            </div>
            <div class="login-forgot-password-wrapper">
                <a href="#" class="login-help-link" tabindex="3">¿Has olvidado tu correo o contraseña?</a>
            </div>
            <button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="4">
                Iniciar sesión
            </button>
            <div class="login-remember-me-wrapper">
                <div class="ui-binary-input login-remember-me">
                    <input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="5" checked="" />
                    <label for="bxid_rememberMe_true">
                        <span class="login-remember-me-label-text">Recuérdame</span>
                    </label>
                    <div class="helper"></div>
                </div>
            </div>
        </form>
        <form class="login-form" action="#" method="">
            <div class="facebookForm regOption">
                <div class="fb-minimal">
                    <hr/>
                    <button class="btn minimal-login btn-submit btn-small" type="submit" autocomplete="off" tabindex="6">
                        <div class="fb-login"><img class="icon-facebook" src="/img/FB-f-Logo__blue_57.png"/>
                            <span class="fbBtnText">Iniciar sesión con Facebook</span>
                        </div>
                    </button>
                </div>
            </div>
        </form>
        <div class="login-signup-now">¿Todavía sin Netflix?
            <a class=" " target="_self" href="/register">Suscríbete ya</a>.
        </div>
    </div>
</div>

@endsection