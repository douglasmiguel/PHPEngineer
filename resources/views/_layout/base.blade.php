<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('_layout.head')
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini {{ Menu::checkIsCollapsed() }}" data-base-url="{{ $config->base_url }}">
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ route('home') }}" class="logo">
                <span class="logo-mini"><b>{{ $config->admin_lte_collapsed_1 }}</b>{{ $config->admin_lte_collapsed_2 }}</span>
                <span class="logo-lg"><b>{{ $config->admin_lte_collapsed_1 }}</b> {{ $config->admin_lte_title_2 }}</span>
            </a>
            @include('_layout.nav')
        </header>
        @include('_layout.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('_layout.footer')
    </div>
    <script src="{{ $config->path_root }}plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="{{ $config->path_root }}bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ $config->path_root }}dist/js/app.min.js"></script>
    <script src="{{ $config->path_root }}plugins/sweet-alert/sweet-alert.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{ $config->path_root }}plugins/sweet-alert/sweet-alert.init.js" type="text/javascript" charset="utf-8"></script>
    @yield('js')
    <script src="{{ $config->path_root }}js/Digined.js"></script>
</body>
</html>