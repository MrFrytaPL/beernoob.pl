<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/dist/semantic.min.css">
    <script src="/dist/semantic.min.js"></script>
</head>
<style>
    body {
background: rgb(140,157,255);
background: -moz-linear-gradient(114deg, rgba(140,157,255,1) 0%, rgba(249,151,212,1) 100%);
background: -webkit-linear-gradient(114deg, rgba(140,157,255,1) 0%, rgba(249,151,212,1) 100%);
background: linear-gradient(114deg, rgba(140,157,255,1) 0%, rgba(249,151,212,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#8c9dff",endColorstr="#f997d4",GradientType=1);
    }
</style>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans bg-fixed">
    <div class="container mx-auto bg-white my-20 p-16 min-h-screen rounded-xl shadow-xl">
        <div class="flex justify-between mb-10">
        <div id="logo"><img src="{{asset('img/logo.png')}}" class="h-24" alt="Logo Michał Jadczuk"></div>
            <div id="mainMenu"><div class="ui secondary  menu">
                <a class="active item">
                    Home
                </a>
                <a class="item">
                    Messages
                </a>
                <a class="item">
                    Friends
                </a>
                <div class="right menu">
                    <a class="ui item">
                        Logout
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="flex justify-between">
            <div id="welcome">welcome</div>
            <div id="photo">photo</div>
        </div>
    </div>
</body>
</html>
