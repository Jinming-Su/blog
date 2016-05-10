<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Loading Bootstrap -->
    <link href="/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="/css/flat-ui.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="/js/vendor/jquery.min.js"></script>
    <!-- Loading Font Awesome -->
    <link href="/css/vendor/awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/main.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->

    @yield('head')

</head>

<body>

    @yield('body')

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/vendor/video.js"></script>
    <script src="/js/flat-ui.min.js"></script>
</body>

</html>