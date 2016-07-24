<meta charset="{{ $config->charset }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ $config->title }}</title>
<meta content="{{ $config->viewport }}" name="viewport">

<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="{{ $config->path_favicon }}ms-icon-144x144.png">
<meta name="theme-color" content="#FFFFFF">
<link rel="author" href="{{ $config->author }}">
<link rel="publisher" href="{{ $config->publisher }}">

<link rel="apple-touch-icon" sizes="57x57" href="{{ $config->path_favicon }}apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{{ $config->path_favicon }}apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{ $config->path_favicon }}apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{ $config->path_favicon }}apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{{ $config->path_favicon }}apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{{ $config->path_favicon }}apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{{ $config->path_favicon }}apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{ $config->path_favicon }}apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{ $config->path_favicon }}apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ $config->path_favicon }}android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ $config->path_favicon }}favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{ $config->path_favicon }}favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ $config->path_favicon }}favicon-16x16.png">
<link rel="manifest" href="{{ $config->path_favicon }}manifest.json">

<link rel="stylesheet" href="{{ $config->path_root }}bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ $config->path_root }}dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="{{ $config->path_root }}dist/css/skins/skin-purple.min.css">
<link rel="stylesheet" href="{{ $config->path_root }}plugins/sweet-alert/sweet-alert.min.css">
<link rel="stylesheet" href="{{ $config->path_root }}css/default.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
