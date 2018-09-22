<!doctype html>

<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appSettings->tbl_title }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/layout/favicon.png') }}" />

    <meta name="keywords" content="{{ $appSettings->tbl_keywords }}">
    <meta name="description" content="{{ $appSettings->tbl_descript }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="{{ $appSettings->tbl_author }}">
    <meta name="language" content="{{ $appSettings->tbl_language }}" />
    <meta name="URL" content="http://{{ $appSettings->tbl_url }}" />
    <meta name="subject" content="{{ $appSettings->tbl_subject }}" />
    <meta name="rating" content="general" />
    <meta name="updated" content="daily" />
    <meta name="robots" content="index, follow" />
    <meta name="audience" content="all" />
    <meta name="Publisher" content="{{ $appSettings->tbl_publisher }}" />
    <meta name="ia_archiver" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="Search Engines" content="{{ $appSettings->tbl_search }}" />
    <meta name="audience" content="all" />
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="{{ $appSettings->tbl_generator }}">
    <meta name="document-classification" content="{{ $appSettings->tbl_system }}" />

    <link rel="stylesheet" href="{{ elixir('dist/css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dist/bootstrap/9clicks.css') }}" type="text/css"/>

    <script type="text/javascript" src="{{ asset('dist/js/jQuery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/lightbox.js') }}"></script>

    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="">

</head>

<body>
<div id="background"></div>
<div id="base">

@yield('content')

</div>
</body>

<Script type="text/javascript" src="{{ asset('dist/bootstrap/9clicks.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/bootstrap/bundle.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/bootstrap/popper.js') }}"></Script>

<style type="text/css">
    #background{ background:url(../images/layout/background.jpg) no-repeat center center fixed;
        width:100%;
        height:100%;
        position:absolute;
        top:0;
        left:0;
        z-index:0;
    }

    #background{
        background:url(../images/layout/background.jpg) no-repeat center center fixed;
        background-size: cover; /*Css padrão*/
        -webkit-background-size: cover; /*Css safari e chrome*/
        -moz-background-size: cover; /*Css firefox*/
        -ms-background-size: cover; /*Css IE não use */
        -o-background-size: cover; /*Css Opera*/
    }

    #base{
        width:100%;
        height:100%;
        position:absolute;
        top:0;
        left:0;
        z-index:1;
        overflow:auto;
    }
</style>

<!-- Modais de Login -->

<!-- Modais de Informações dos Cursos -->

<!-- Include de Validação -->

</html>