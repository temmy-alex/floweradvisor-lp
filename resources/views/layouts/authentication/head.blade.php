<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('authentication/assets/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('authentication/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('authentication/assets/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('authentication/assets/css/style.css') }}" />

    @stack('style')
</head>
<body>
    <div class="container-fluid">
        <div class="container">