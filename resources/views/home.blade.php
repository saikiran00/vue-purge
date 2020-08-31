<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stylesheet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="font-normal mx-48">
            HOME Composer
        </div>

        <div id="app">
            <show-case></show-case>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
