<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" />

    </head>
    <body>
    <div class="nav">
        @include('partials.login')
    </div>
        @include('partials.add')
        @include('partials.error_block')
        @include('partials.info_block')


          @yield('task')
    </body>

</html>
