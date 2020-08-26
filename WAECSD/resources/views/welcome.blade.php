<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel and vue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel='stylesheet' href="{{ assets('css/app.css') }}" /> --}}

        <link rel='stylesheet' href="css/app.css" />
        <script src="js/app.js" defer></script>
    </head>
    <body class="">
        <div id="app">
            <app-component></app-component>
        </div>
    </body>
</html>
