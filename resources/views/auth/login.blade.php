<!DOCTYPE html>
<html>
    <head>
        @include('auth._layout.head')
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ route('home') }}"><b>{{ $config->admin_lte_title_1 }}</b>{{ $config->admin_lte_title_2 }}</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @include('auth.form')
            </div>
        </div>
        @include('auth._layout.js')
    </body>
</html>
